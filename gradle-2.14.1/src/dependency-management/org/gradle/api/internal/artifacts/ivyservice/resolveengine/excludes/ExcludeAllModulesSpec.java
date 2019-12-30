/*
 * Copyright 2016 the original author or authors.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

package org.gradle.api.internal.artifacts.ivyservice.resolveengine.excludes;

import org.gradle.api.artifacts.ModuleIdentifier;
import org.gradle.internal.component.model.IvyArtifactName;

class ExcludeAllModulesSpec extends AbstractModuleExcludeRuleFilter {
    @Override
    public String toString() {
        return "{all modules}";
    }

    @Override
    public boolean equals(Object o) {
        return o == this || !(o == null || o.getClass() != getClass());
    }

    @Override
    public int hashCode() {
        return 0;
    }

    @Override
    public boolean doAcceptsSameModulesAs(AbstractModuleExcludeRuleFilter other) {
        return true;
    }

    public boolean acceptModule(ModuleIdentifier element) {
        return false;
    }

    public boolean acceptArtifact(ModuleIdentifier module, IvyArtifactName artifact) {
        return true;
    }

    public boolean acceptsAllArtifacts() {
        return true;
    }
}
